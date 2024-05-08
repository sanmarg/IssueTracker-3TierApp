pipeline {
    agent any
    
    environment {
        SCANNER_HOME = tool 'sonar'
        SONAR_TOKEN = credentials('sonar-token')
        DOCKER_PWD = credentials('docker-pwd')
        
    }

    stages {
        stage('Git Clone') {
            steps {
                git branch: 'main', url: 'https://github.com/sanmarg/IssueTracker-3TierApp/'
            }
        }
        stage('Trivy Scan') {
            steps {
                sh "trivy fs --format table -o fs-report.html ."
            }
        }
        stage('Sonar Scan') {
            steps {
                sh "$SCANNER_HOME/bin/sonar-scanner -Dsonar.projectKey=IssueTracker -Dsonar.projectName=IssueTracker -Dsonar.login=${SONAR_TOKEN}"
            }
        }
        stage('Docker Image and Tag') {
            steps {
                script {
                    sh "docker build -t sanmargparanjpe/issue-tracker:latest ."
                }
            }
        }
        stage('Docker Push to Registry') {
            steps {
                script {
                    withCredentials([usernamePassword(credentialsId: 'docker-cred', usernameVariable: 'USERNAME', passwordVariable: 'PASSWORD')]) {
                        sh "#docker login --username=${USERNAME} --password=${PASSWORD}"
                        sh "#docker push sanmargparanjpe/issue-tracker:latest"
                    }
                }
            }
        }
        stage('Docker Tag') {
            steps {
                script {
                    sh "docker tag sanmargparanjpe/issue-tracker:latest 127.0.0.1:8085/issue-tracker:latest"
                }
            }
        }
        
        stage('Docker Push Nexus') {
            steps {
                script {
                    sh "docker login -u admin -p 'NEXUS_PWD' 127.0.0.1:8085"
                    sh "docker push 127.0.0.1:8085/issue-tracker:latest"
                }
            }
        }
        stage('K8s Deploy') {
            steps {
                kubeconfig(caCertificate: '', credentialsId: 'kube-config', serverUrl: 'https://xxxxxxx.xxxx:6443/') {
                    sh "kubectl apply -f deployment.yaml"
                }
                
            }
        }
        
    }
}

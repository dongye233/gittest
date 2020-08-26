pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                checkout([$class: 'GitSCM', branches: [[name: '*/dev']], doGenerateSubmoduleConfigurations: false, extensions: [], submoduleCfg: [], userRemoteConfigs: [[credentialsId: 'testt', url: 'https://github.com/dongye233/gittest.git']]])
                bat label: '', script: 'copy C:\Users\founq\.jenkins\workspace\test_dev D:\git\'
            }
        }
    }
}


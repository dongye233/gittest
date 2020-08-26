pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                bat label: '', script: 'cd "D:\\git"'
                checkout([$class: 'GitSCM', branches: [[name: '*/dev']], doGenerateSubmoduleConfigurations: false, extensions: [], submoduleCfg: [], userRemoteConfigs: [[credentialsId: 'testt', url: 'https://github.com/dongye233/gittest.git']]])
            }
        }
    }
}


node {
    stage('Checkout') {
        checkout scm
    }
    stage('Build and Test') {
        docker.build("test-image").inside(
            steps {
                echo 'Running Tests'
                sh 'php vendor/bin/phpunit tests'
            }
        )
    }        
}

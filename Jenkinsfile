node {
    stage('Build') {
        steps {
            echo 'Checkout'
            checkout scm
        }
        steps {
            echo 'Building Image'
            docker.build("test-image").inside(
                steps {
                    echo 'Running Tests'
                    sh 'php vendor/bin/phpunit tests'
                }
            )
        }
    }
}

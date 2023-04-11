node {
    stage('Build') {
        echo 'Building....'
        docker.image('composer').inside {
            stage('Test') {
                sh 'composer install && composer dumpautoload'
                sh 'vendor/bin/phpunit tests'
            }
        }
    }
}

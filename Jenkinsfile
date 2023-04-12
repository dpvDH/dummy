node {
    stage('Build') {
        echo 'Building....'
        def testImage = docker.build("test-image")
        testImage.inside(
           sh 'vendor/bin/phpunit tests'
        )
    }
}

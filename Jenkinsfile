node {
    stage('Build') {
        echo 'Building....'
        def testImage = docker.build("test-image", "./Dockerfile")
        testImage.inside(
           sh 'vendor/bin/phpunit tests'
        )
    }
}

node {
    stage('Build') {
        echo 'Building....'
        checkout scm
        def testImage = docker.build("test-image")
        testImage.inside(
           sh "/vendor/bin/phpunit tests"
        )
    }
}

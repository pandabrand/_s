//Project Configuration
grunt.initConfig({
  pkg. grunt.file.readJSON('package.json'),
  mkdir: {
    all: {
      options: {
        create: ['assets/css', 'assets/js','assets/img']
      }
    }
  }
  
  grunt.loadNpmTask('grunt-mkdir');
  
  grunt.registerTask('default', ['mkdir']);
});
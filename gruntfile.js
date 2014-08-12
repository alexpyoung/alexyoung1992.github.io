module.exports = function (grunt) {
    // Automatically load Grunt tasks from dependency lists
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        clean: {
            build: ['build'],
            sass: ['build/css/**/*.scss']
        },

        cleanempty: {
            build: {
                src: ['build/**/*']
            }
        },

        copy: {
            build: {
                cwd: 'src',
                src: ['**'],
                dest: 'build',
                expand: true
            }
        },

        sass: {
            build: {
                files: [{
                    cwd: 'build/css',
                    src: ['**/*.scss', '!**/_*.scss'],
                    dest: 'build/css',
                    ext: '.css',
                    expand: true
                }]
            }
        },

        cssc: {
            build: {
                files: [{
                    cwd: 'build/css',
                    src: ['**/*.css'],
                    dest: 'build/css',
                    expand: true
                }]
            }
        },

        cssmin: {
            build: {
                // files: [{
                //     cwd: 'build/css',
                //     src: ['**/*.css'],
                //     dest: 'build/css',
                //     expand: true
                // }]
            }
        },

        watch: {
            sass: {
                files: ['build/css/**/*.scss'],
                task: 'build-sass'
            }
        }
    });

    grunt.registerTask('default', ['build']);
    grunt.registerTask('build-sass', 'Compiles, optimizes, and minifies SASS files', ['sass:build', 'clean:sass', 'cssmin:build']);
    grunt.registerTask('build', 'Compiles source files into a build directory', ['clean:build', 'copy:build', 'build-sass', 'cleanempty:build', 'watch']);
};
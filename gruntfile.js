module.exports = function (grunt) {
    // Automatically load Grunt tasks from dependency lists
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);
    // Show execution times of Grunt tasks
    require('time-grunt')(grunt);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        notify: {
            build: {
                options: {
                    message: 'Build complete!'
                }
            },

            copy: {
                options: {
                    message: 'Copy complete!'
                }
            },

            'build-sass': {
                options: {
                    message: 'SASS build complete!'
                }
            }
        },

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
            },

            sass: {
                cwd: 'src/css',
                src: ['**'],
                dest: 'build/css',
                expand: true
            }
        },

        sass: {
            build: {
                files: [{
                    cwd: 'build/css',
                    src: ['**/*.scss', '!**/_*.scss', '!vendor/**/*'],
                    dest: 'build/css',
                    ext: '.css',
                    expand: true
                }]
            }
        },

        cssc: {
            // build: {
            //     files: [{
            //         cwd: 'build/css',
            //         src: ['**/*.css'],
            //         dest: 'build/css',
            //         expand: true
            //     }]
            // }
            // Don't know how to condense multiple files
        },

        cssmin: {
            build: {
                files: [{
                    cwd: 'build/css',
                    src: ['**/*.css', '!vendor/**/*'],
                    dest: 'build/css',
                    expand: true
                }]
            }
        },

        watch: {
            all: {
                files: ['src/**', '!**/*.scss'],
                tasks: ['newer:copy:build', 'notify:copy']
            },

            sass: {
                files: ['src/**/*.scss'],
                tasks: ['newer:copy:sass', 'build-sass']
            }
        }
    });

    grunt.registerTask('default', ['build']);
    grunt.registerTask('build-sass', 'Compiles, optimizes, and minifies SASS files', ['sass:build', 'cssmin:build', 'notify:build-sass']);
    grunt.registerTask('build', 'Compiles source files into a build directory', ['newer:copy:build', 'build-sass', 'cleanempty:build', 'notify:build', 'watch']);
};
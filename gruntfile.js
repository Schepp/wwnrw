'use strict';

module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        sass: {
            options: {
                style: 'compact',
                sourceMap: true
            },
            all: {
                files: {
                    'assets/stylesheets/screen.css': 'assets/sass/screen.scss'
                }
            }
        },

        autoprefixer: {
            options: {
                map: true,
                browsers: ['last 2 version', 'ie >= 9', 'Safari >= 7', 'iOS >= 7']
            },
            main: {
                src: [
                    'assets/stylesheets/screen.css'
                ]
            }
        },

        watch: {
            styles: {
                files: [
                    'assets/sass/**/*.scss'
                ],
                tasks: [
                    'css'
                ]
            }
        }
    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('css', [
        'sass',
        'autoprefixer'
    ]);

    grunt.registerTask('default', [
        'css'
    ]);
};

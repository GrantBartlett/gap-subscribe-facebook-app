module.exports = function (grunt) {

    var js_src_files = [
        'src/components/jquery-placeholder/jquery.placeholder.min.js',
        'node_modules/parsleyjs/dist/parsley.min.js',
        'src/js/*.js'
    ];

    // Project configuration.
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),


        // within grunt.initConfig
        concat: {
            options: {
                separator: ';\n',
                mangle: false
            },
            dist: {
                src: js_src_files,
                dest: 'dist/js/app.js'
            }
        },

        uglify: {
            options: {
                banner: '\n',
                mangle: true
            },
            build: {
                src: js_src_files,
                dest: 'dist/js/app.min.js'
            }
        },

        less: {
            dev: {
                options: {
                    paths: ["src/css"],
                    compress: false
                },
                files: {
                    "dist/css/main.css": "src/less/main.less"
                }
            },
            build: {
                options: {
                    paths: ["src/css"],

                    modifyVars: {
                        imgPath: '"dist/images/"',
                        bgColor: 'red'
                    },
                    compress: true
                },
                files: {
                    "dist/css/main.min.css": "src/less/main.less"
                }
            }
        },

        watch: {
            options: {
                dateFormat: function (time) {
                    grunt.log.writeln('Finished watching in ' + time + ' ms at' + (new Date()).toString());
                },
                livereload: true
            },
            scripts: {
                files: 'src/js/*.js',
                tasks: ['concurrent:compress']
            },

            css: {
                files: 'src/*/*.less',
                tasks: ['concurrent:compress']
            }
        },

        concurrent: {
            compress: ['less', 'concat', 'uglify'],
            start: {
                tasks: ['watch'],
                options: {
                    logConcurrentOutput: true
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-concurrent');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');

    // Default task(s).
    grunt.registerTask('default', ['concurrent']);
};
// ============================================================================================= //
//                                        GRUNT - UGLIFY                                         //
// ============================================================================================= //

module.exports = {
    options: {
        banner: '/*! <%= package.name %> - <%= grunt.template.today("yyyy-mm-dd") %> */\r'
    },
    libs: {
        files: {
            '<%= js %>/dist/libs.min.js': '<%= js %>/dist/libs.js'
        }
    },
    theme: {
        files: {
            '<%= js %>/dist/theme.min.js': '<%= js %>/dist/theme.js'
        }
    }
};

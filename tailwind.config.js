const defaults = require('tailwindcss/defaultTheme');

module.exports = {
    plugins: [
        require('tailwindcss'),
        require('autoprefixer'),
      ],
    purge: {
        content: [
            'source/**/*.html',
            'source/**/*.md',
            'source/**/*.js',
            'source/**/*.php',
            'source/**/*.vue',
        ],
        options: {
            safelist: [/language/, /hljs/, /mce/],
        },
    },
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Nunito Sans"', ...defaults.fontFamily.sans],
            },
            lineHeight: {
                normal: '1.6',
                loose: '1.75',
            },
            maxWidth: {
                '8xl': '88rem',
            },
            boxShadow: {
                search: '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
            },
            backgroundImage: {
                'post-cover-01': "url('/assets/img/post-cover-image-1.png')",
                'post-cover-02': "url('/assets/img/post-cover-image-2.png')",
                'cover-image-01': "url('/assets/img/cover-image-01.webp')",
                'cover-image-02': "url('/assets/img/cover-image-02.webp')",
            }
        },
        fontSize: {
            xs: '.8rem',
            sm: '.925rem',
            base: '1rem',
            lg: '1.125rem',
            xl: '1.25rem',
            '2xl': '1.5rem',
            '3xl': '1.75rem',
            '4xl': '2.125rem',
            '5xl': '2.625rem',
            '6xl': '10rem',
        },
    },
    variants: {
        extend: {
            width: ['focus'],
        },
    },
};

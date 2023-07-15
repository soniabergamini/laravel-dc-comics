/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primaryBlu: '#0182F9',
                secondaryBlack: '#1C1C1C',
                tertiaryGrey: '#303030'
            }
        }
    },
    plugins: [
        plugin(function ({ addComponents }) {
            addComponents({
                '.alert': {
                    position: 'relative',
                    padding: '0.75rem 1.25rem',
                    marginBottom: '1rem',
                    border: '1px solid transparent',
                    borderRadius: '0.25rem',
                },
                '.alert-danger': {
                    color: '#721c24',
                    backgroundColor: '#f8d7da',
                    borderColor: '#f5c6cb'
                },
                '.invalid-feedback': {
                    width: '100%',
                    marginTop: '-.6rem',
                    marginBottom: '.8rem',
                    fontSize: '80%',
                    color: '#dc3545'
                },
                '.is-invalid': {
                    borderColor: '#dc3545'
                },
                '.form-control': {
                    borderColor: '#dc3545',
                    margin: '.5rem 0 1rem',
                    display: 'block',
                    width: '100%',
                    padding: '0.375rem 0.75rem',
                    fontSize: '1rem',
                    lineHeight: '1.5',
                    color: '#495057',
                    backgroundColor: '#fff',
                    backgroundClip: 'padding-box',
                    border: '1px solid #ced4da',
                    borderRadius: '0.25rem',
                    transition: 'border-color .15s ease-in-out, box-shadow .15s ease-in-out'
                },
                '.form-check': {
                    position: 'relative',
                    display: 'block',
                    paddingLeft: '1.25rem'
                },
                '.form-check-input': {
                    position: 'absolute',
                    marginTop: '0.3rem',
                    marginLeft: '-1.25rem',
                    cursor: 'pointer'
                },
                '.form-check-label': {
                    marginBottom: '0',
                    display: 'inline-block',
                    cursor: 'pointer'
                },
                '.form-field-margin': {
                    margin: '.5rem 0 1rem'
                }
            })
        })
    ]
}

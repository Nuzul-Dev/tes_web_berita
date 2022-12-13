"use strict";
$(document).ready(function() {
    $("form.login-ajah").bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'Nama Pengguna Harus di isi..'
                    }
                }
            },
            katasandi: {
                validators: {
                    notEmpty: {
                        message: 'Kata sandi Harus di isi..'
                    }
                }
            }
        }
    });
});
$(document).ready(function() {
    $('.cekmeout').click(function() {
        const destination = $(this)[0].attributes[2].nodeValue
        if($('.pwd')[destination].type == 'password'){
            $('.pwd')[destination].type = 'text'
        }else{
            $('.pwd')[destination].type = 'password'
        }
    })

    $('#changeToSeller').click(function() {
        const widthContainer = $('#buyer')[0].offsetWidth

        $('#statusBuyer').css({
            'transform' : `translateX(${widthContainer - $('#statusBuyer')[0].offsetWidth}px)`
        })
        $('#formBuyer').css({
            'transform' : `translateX(${(-1) * (widthContainer - $('#formBuyer')[0].offsetWidth)}px)`
        })
        $('#buyer').toggleClass('toggle')
        setTimeout(function() {
            $('#buyer').toggleClass('toggle')
            $('#buyer').css("display", "none")
            $('#seller').css("display", "block")

            $('#formBuyer').css({
                'transform' : `translateX(0px)`
            })
            $('#statusBuyer').css({
                'transform' : `translateX(0px)`
            })


        }, 1000)

    })
    $('#changeToBuyer').click(function() {
        const widthContainer = $('#seller')[0].offsetWidth

        $('#statusSeller').css({
            'transform' : `translateX(${(-1) * (widthContainer - $('#statusSeller')[0].offsetWidth)}px)`
        })
        $('#formSeller').css({
            'transform' : `translateX(${widthContainer - $('#formSeller')[0].offsetWidth}px)`
        })
        $('#seller').toggleClass('toggle')
        setTimeout(function() {
            $('#seller').toggleClass('toggle')
            $('#seller').css("display", "none")
            $('#buyer').css("display", "block")

            $('#statusSeller').css({
                'transform' : `translateX(0px)`
            })
            $('#formSeller').css({
                'transform' : `translateX(0px)`
            })

        }, 1000)

    })


    // REGISTER
})
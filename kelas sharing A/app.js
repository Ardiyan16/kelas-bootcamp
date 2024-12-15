$(document).ready(function () {

    function load_keranjang() {
        let data_keranjang = [
            {
                nama: "baju a",
                qty: 1,
                price: 20000,
            },
            {
                nama: "celana a",
                qty: 2,
                price: 100000,
            },
        ];

        // $.each(data_keranjang,function(index, val) {
        //     console.log(val);
        // })
    }
    load_keranjang();

    const load_data2 = () => {

    }
    load_data2();


    $(document).on('change', '.operator', function () {
        let angaka1 = $('.angka1').val();
        let angaka2 = $('.angka2').val();
        let operator = $('.operator').val();
        if (operator == 'tambah') {
            let hasil = parseInt(angaka1) + parseInt(angaka2);
            $('.hasil_perhitungan').val(hasil);
        } else if (operator == 'kurang') {
            let hasil = parseInt(angaka1) - parseInt(angaka2);
            $('.hasil_perhitungan').val(hasil);
        } else if (operator == 'perkalian') {
            let hasil = parseInt(angaka1) * parseInt(angaka2);
            $('.hasil_perhitungan').val(hasil);
        } else {
            let hasil = parseInt(angaka1) / parseInt(angaka2);
            $('.hasil_perhitungan').val(hasil);
        }
        
    })
    
    $('#search').on('keyup', function () {
        let search = $('#search').val();
        console.log(search);
    })

    $('.show-form').hide();
    $('.hide-form').on('click', function () {
        $('.form').hide();
        $('.show-form').show();
        $('.hide-form').hide();
    })

    $('.show-form').on('click', function () {
        $('.form').show();
        $('.show-form').hide();
        $('.hide-form').show();
    })

})

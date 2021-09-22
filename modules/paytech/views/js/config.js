/**
 * Created by PhpStorm.
 * USER: INTECH
 * Date: 05/04/2018
 * Time: 13:09
 */
$(document).ready(function () {
    $(".pe_headerConfig").on('click',function () {
        $('.pe_header').children().removeClass('pe_active');
        $(this).addClass('pe_active');
        if($(this).attr("value") == 1)
        {
            $('.pe_parametre').hide();
            $('.pe_produit').show();
        }
        else  if($(this).attr("value") == 2)
        {
            $('.pe_produit').hide();
            $('.pe_parametre').show();
        }

    });
});

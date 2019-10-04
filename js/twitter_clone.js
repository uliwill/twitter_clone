$(document).ready(function() {

    $("#conteudo").load("cont_index.php");

    // LOGIN
    $('#btn_login').click(function() {

        var campo_vazio = false;

        if($('#campo_usuario').val() == '') {
            $('#campo_usuario').css({'border-color': '#A94442'});
            campo_vazio = true;
            $('#campo_usuario').focus();
        } else {
            $('#campo_usuario').css({'border-color': '#CCC'});
        }
        if($('#campo_senha').val() == '') {
            $('#campo_senha').css({'border-color': '#A94442'});
            campo_vazio = true;
        } else {
            $('#campo_senha').css({'border-color': '#CCC'});
        }
        if(campo_vazio) return false;
        
    });

    // INCLUIR TWEETS
    $('#btn_tweet').click(function() {
        if($('#texto_tweet').val().length > 0) {
            $.ajax({
                url: '/twitter_clone/inclui_tweet.php',
                method: 'post',
                data: {texto_tweet: $('#texto_tweet').val()},
                success: function(data) {
                    $('#texto_tweet').val('');
                    atualizaTweet();
                }
            });
        }
    });

    // ATUALIZAR TWEETS
    function atualizaTweet() {
        $.ajax({
            url: '/twitter_clone/get_tweet.php',
            success: function(data) {
                $('#tweets').html(data);
            }
        });
    }
    atualizaTweet();

    // PROCURAR PESSOAS
    $('#btn_procurar_pessoa').click(function() {
        if($('#nome_pessoa').val().length > 0) {
            $.ajax({
                url: '/twitter_clone/get_pessoas.php',
                method: 'post',
                data: $('#form_procurar_pessoas').serialize(),
                success: function(data) {
                    $('#pessoas').html(data);
                }
            });
        }
    });

});
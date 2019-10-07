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
                    atualizaNumTweet();
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

                    $('.btn_seguir').click(function() {
                        var id_usuario = $(this).data('id_usuario');

                        $('#btn_seguir_'+id_usuario).attr('class', 'btn btn-primary btn-sm btn_seguir nao_exibir');
                        $('#btn_deixar_seguir_'+id_usuario).attr('class', 'btn btn-danger btn-sm btn_deixar_seguir');

                        $.ajax({
                            url: 'seguir.php',
                            method: 'post',
                            data: {seguir_id_usuario: id_usuario},
                            success: function(data){
                                //alert('Você agora segue esse usuário!');
                            }
                        });
                    });

                    $('.btn_deixar_seguir').click(function(){
                        var id_usuario = $(this).data('id_usuario');

                        $('#btn_seguir_'+id_usuario).attr('class', 'btn btn-primary btn-sm btn_seguir');
                        $('#btn_deixar_seguir_'+id_usuario).attr('class', 'btn btn-danger btn-sm btn_deixar_seguir nao_exibir');

                        $.ajax({
                            url: 'deixar_seguir.php',
                            method: 'post',
                            data: {deixar_seguir_id_usuario: id_usuario},
                            success: function(data){
                                //alert('Você deixou de seguir esse usuário!');
                            }
                        });

                    });
                }
            });
        }
    });

    // ATUALIZAR NÚMERO DE TWEETS
    function atualizaNumTweet() {
        $.ajax({
            url: '/twitter_clone/num_tweet.php',
            success: function(data) {
                $('#num_tweets').html(data);
            }
        });
    }
    atualizaNumTweet();

    // ATUALIZAR NÚMERO DE SEGUIDORES
    function atualizaNumSeguidores() {
        $.ajax({
            url: '/twitter_clone/num_seguidores.php',
            success: function(data) {
                $('#num_seguidores').html(data);
            }
        });
    }
    atualizaNumSeguidores();

});
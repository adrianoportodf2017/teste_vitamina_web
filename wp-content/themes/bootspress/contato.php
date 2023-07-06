<?php
/**
 * Template Name: CONTATO
 * Template Post Type: page
 */

get_header(); ?>
<style>
    .text-primary{
      color:  #041B3A !important;
      text-transform: uppercase;
      font-weight: 500;

    }
    </style>
<div class="container">
    <div class="row ">
        <div class="col-2"></div>
        <div class="col-8">
    <h1>Formulário de Contato</h1>
    <form id="contact-form" onsubmit="return false;">
      <div class="mb-3">
        <label class="form-label text-primary">Nome:</label>
        <input type="text" class="form-control border-0 border-bottom" name="name" required>
      </div>
      <div class="mb-3">
        <label class="form-label text-primary">Email:</label>
        <input type="email" class="form-control border-0 border-bottom" name="email" required>
      </div>
      <div class="mb-3">
        <label class="form-label text-primary">Telefone:</label>
        <input type="tel" class="form-control border-0 border-bottom" name="phone" required>
      </div>
      <div class="mb-3">
        <label class="form-label text-primary">Estado:</label>
        <select class="form-select" name="state" required>
          <option disabled selected>Selecione o estado</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="SP">São Paulo</option>
          <!-- Adicione aqui todos os estados -->
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label text-primary">Cidade:</label>
        <input type="text" class="form-control border-0 border-bottom" name="city" required>
      </div>
      <div class="mb-3">
        <label class="form-label text-primary">Mensagem:</label>
        <textarea class="form-control border-0 border-bottom" name="message" rows="4" required></textarea>
      </div>
      <div class="row text-center">
      <button type="submit" class="btn btn-primary text-center W-50">ENVIAR MENSAGEM</button>
      </div>
    </form>
    <div id="response"></div>
  </div>
</div>
</div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
  $(document).ready(function() {
  $('#contact-form').submit(function(event) {
    event.preventDefault(); // Impede o comportamento padrão de envio do formulário

    $.ajax({
      url: '<?= site_url()?>/wp-admin/admin-ajax.php',
      type: 'POST',
      data: {
        action: 'enviar_email',
        name: $('input[name=name]').val(),
        email: $('input[name=email]').val(),
        phone: $('input[name=phone]').val(),
        state: $('select[name=state]').val(),
        city: $('input[name=city]').val(),
        message: $('textarea[name=message]').val()
      },
      success: function(response) {
        if (response === 'RJ') {
            $('#response').html('<h1 class="text-primary fs-3">OBRIGADO...</h1><p><small>Recebemos Sua mensagem!</small>');

          $('#response').html('<h1 class="text-primary fs-3">OBRIGADO...</h1><p><small>Recebemos Sua mensagem!</small><hr><img src="<?php echo get_template_directory_uri()?>/assets/image/loja_rio.png">');
          $('#contact-form').hide();
 
        } else if (response === 'success') {
          $('#response').html('<h1 class="text-primary fs-3">OBRIGADO...</h1><p><small>Recebemos Sua mensagem!</small>');
          $('#contact-form').hide();
        } else {
          $('#response').html('Erro ao enviar a mensagem.');
        }
      },
      error: function() {
        $('#response').html('Erro ao enviar a mensagem.');
      }
    });
  });
});

  </script>
	</main><!-- #primary -->

<?php
get_footer();

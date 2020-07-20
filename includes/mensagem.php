<?php
// Sessão
// Exibir a mensagem de cadastro
session_start();
if(isset($_SESSION['mensagem'])): ?>

<!-- Exibir a mensagem com efeito JavaScript / onload serve para carregar a funcao depois que toda pagina for carregada-->
<script>
  window.onload = function() {
      M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
   };
</script>

<?php 
endif;
session_unset();

?>
<main class="content">
  <?php
    echo "Qtde de Usuários Ativos:{$activeUsersCount}";
    echo '<hr>';
    echo "Horas trabalhadas no mês:{$hoursInMonth}";
    echo '<hr>';
    print_r($absentUsers);
  ?>
</main>
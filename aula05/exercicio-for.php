<select>
    <option selected> -- Selecione o Ano --</option>

    <?php
    for ($ano = 2022; $ano >= 1900; $ano--) {
        echo "<option>{$ano}</option>";
    };
    ?>

</select>

<select>
    <option selected> -- Selecione o dia --</option>

    <?php
    for ($dia = 1; $dia <= 31; $dia++) {
        echo "<option>{$dia}</option>";
    }
    ?>

</select>
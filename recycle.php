<table class="table mt-4">
                <thead class="thead bg-white">
                    <tr>
                        <th>Temperatura sensor</th>
                        <th>Luminosidade sensor</th>
                        <th>Co² sensor</th>

                    </tr>

                </thead>
                <tbody>

                    <!-- FORM PARA PEGAR O DADO QUE USUARIO DIGITAR-->

                    <?php
                    $dado = $con3->fetch_array();
                    echo "<tr>
                            <td> " . $dado['temp'] . "</td>             
                            <td > " . $dado['lumi'] . "</td>
                            <td > " . $dado['co2'] . "</td>
                    </tr>";
                    ?>
                </tbody>
            </table>

            <table class="table mt-4">
                <thead class="thead bg-white">
                    <tr>
                        <th>Temperatura Notificar</th>
                        <th>Luminosidade Notificar</th>
                        <th>Co² Notificar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $dado = $con4->fetch_array();
                    echo "<tr>
                            <td> " . $dado['temp'] . "</td>             
                            <td > " . $dado['luminosidade'] . "</td>
                            <td > " . $dado['co2'] . "</td>
                    </tr>";
                    ?>
                </tbody>
            </table>
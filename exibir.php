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
                    while($dado = $con->fetch_array()) {
                    echo "<tr>
                            <td> " . $dado['temp'] . "</td>             
                            <td > " . $dado['lumi'] . "</td>
                            <td > " . $dado['co2'] . "</td>
                    </tr>";
                    }
                    ?>
                </tbody>
            </table>
<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <title>Trade Sentiment - Portfolio</title>
        <link rel="stylesheet" href="css/traden.css"> 
    </head>
    <body>
        <header>
            <?php
                $page = "sentiment";
                include("includes/header.php");
            ?>
        </header>
        <main>
            <br>
        <table>
        <h3>Sentiment</h3>
            <thead>
                <tr>
                    <th class="currency">Currency</th>
                    <th class="week-l">Last week</th>
                    <th class="week-c">This week</th>
                    <th class="week-n">Next week</th>
                    <th class="effect">Effect</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>USD</td>
                    <td>
                    <ul><!-- VORIGE WEEK -->
                        <li>
                            employment-h-vr
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- DEZE WEEK -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- VOLGENDE WEEK -->
                        <li>
                                cpi-di
                        </li>
                        <li>
                                ir-wo
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- EFFECT -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                </tr>
                <tr>


                    <td>Euro</td>
                    <td>
                    <ul><!-- VORIGE WEEK -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- DEZE WEEK -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- VOLGENDE WEEK -->
                        <li>
                                ir-do
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- EFFECT -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                </tr>
                <tr>


                    <td>GBP</td>
                    <td>
                    <ul><!-- VORIGE WEEK -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- DEZE WEEK -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- VOLGENDE WEEK -->
                        <li>
                                gdp-ma
                        </li>
                        <li>
                                cpi-wo
                        </li>
                        <li>
                                ir-do
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- EFFECT -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                </tr>
                <tr>


                    <td>CHF</td>
                    <td>
                    <ul><!-- VORIGE WEEK -->
                        <li>
                            CPI-m-do
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- DEZE WEEK -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- VOLGENDE WEEK -->
                        <li>
                                ir-do
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- EFFECT -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                </tr>
                <tr>


                    <td>CAD</td>
                    <td>
                        <ul><!-- VORIGE WEEK -->
                            <li>gdp-mid-di</li>
                            <li>employment-mid-vr</ol>
                        </ul>
                    </td>
                    <td>
                    <ul><!-- DEZE WEEK -->
                        <li>
                                ir-wo
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- VOLGENDE WEEK -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- EFFECT -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                </tr>
                <tr>


                    <td>AUD</td>
                    <td>
                    <ul><!-- VORIGE WEEK -->
                        <li>
                            CPI-lower-wo
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- DEZE WEEK -->
                        <li>
                                ir-di
                        </li>
                        <li>
                                gdp-wo
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- VOLGENDE WEEK -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- EFFECT -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                </tr>
                <tr>

                
                    <td>NZD</td>
                    <td>
                    <ul><!-- VORIGE WEEK -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- DEZE WEEK -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!-- VOLGENDE WEEK -->
                        <li>
                                gdp-wo
                        </li>
                    </ul>
                    </td>
                    <td>
                    <ul><!--  EFFECT  -->
                        <li>
                                
                        </li>
                    </ul>
                    </td>
                </tr>
            </tbody>
        </table>
        </main>
        <br>
        <footer>
            Mohammed Chennoufi 2021
        </footer>
    </body>
    <script src="js/index.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
</html>

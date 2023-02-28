<?php
                            if (isset($_POST['submit'])) {
                                $to = "boris.modranit@gmail.com";
                                $subject = "Nova poruka s kontakt forme";
                                $name = $_POST['full-name'];
                                $email = $_POST['email'];
                                $message = $_POST['message'];
                                $headers = "From: " . $name . "<" . $email . ">\r\n";
                                $headers .= "Reply-To: " . $email . "\r\n";
                                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

                                $mailBody = "
                                <html>
                                    <head>
                                        <title>" . $subject . "</title>
                                    </head>
                                    <body>
                                        <p>Ime i prezime: " . $name . "</p>
                                        <p>Email: " . $email . "</p>
                                        <p>Poruka: " . $message . "</p>
                                    </body>
                                </html>";

                                if (mail($to, $subject, $mailBody, $headers)) {
                                    echo "<p class='success-message'>Hvala na poruci!</p>";
                                } else {
                                    echo "<p class='error-message'>Došlo je do pogreške prilikom slanja poruke. Molimo pokušajte ponovno.</p>";
                                }
                            }
                            ?>

                            <form class="d-grid p-1" method="post">
                                <div class="contact__form-input">
                                    <label for="full-name">Ime i Prezime</label>
                                    <input
                                        type="text"
                                        id="full-name"
                                        name="full-name"
                                        placeholder="John Smith"
                                        required
                                        aria-required="true"
                                    />
                                </div>
                                <div class="contact__form-input">
                                    <label for="email">Email:</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        placeholder="mail@gmail.com"
                                        required
                                        aria-required="true"
                                    />
                                </div>
                                <div class="contact__form-input">
                                    <label for="message">Vaša poruka:</label>
                                    <textarea
                                        id="message"
                                        name="message"
                                        rows="4"
                                        placeholder="Ostavite nam poruku..."
                                        required
                                        role="textbox"
                                        aria-required="true"
                                    ></textarea>
                                </div>
                                <button class="primary-btn" type="submit" name="submit">Pošalji poruku</button>
                            </form>
document.getElementById("contact-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    // Get form values
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const subject = document.getElementById("subject").value;
    const message = document.getElementById("message").value;

    // Validate form data (you can add more validation here)

    // Send data to the server (you can use AJAX or fetch API)
    // For demonstration purposes, let's log the data
    console.log("Name:", name);
    console.log("Email:", email);
    console.log("Subject:", subject);
    console.log("Message:", message);

    // You can also redirect the user to a thank-you page
});

<? php
    $animaux = ['chien', 'chat', 'souris', 'oiseau'];
    foreach($animaux as $position => $animal) {
    echo 'L\'animal "'.$animal.'" est le ';
        switch ($position) {
            case 0:
    echo '1er';
                break;
            default:
                $position++;
    echo $position.'ème';
        }
    echo ' dans la liste. ';
}

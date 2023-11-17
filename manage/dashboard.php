<html>
    <head> 
        <title>GenieAcademy</title>
        <link rel="stylesheet" href="dashboard.css">
    </head>
    <body>
        
        <main>
            <section class="side"><header style="justify-content: center;
                display: flex; background-color: transparent; ">
                <div style="border-radius: 5px; background-color: #6719bd; height: 60px; width:60px; align-items: center;"><img src="img/user_icon.png" alt="user_icon" width="100%" style="border-radius: 5px;"></div>
             </header><p>
                <?php 
                
             session_start(); 
             if (isset($_SESSION['staff_id'])){
                 $user = $_SESSION['staff_id']; 
                 include 'connection.php';
                 $sql = "SELECT username FROM users WHERE staff_id = $user";
                 $result = $conn->query($sql);
                 if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                    $username = $row["username"];
                    echo $username;
                

                 } 
            }  
            else {
                header("Location:index.html");}
                ?>
                </p>
             <form action="clear.php" method="POST"><button type="submit">Log Out</button></form>
            </section>
            <section class="content"><header>
                <h1>EXAMS MANAGEMENT SYSTEM</h1>
               
            </header>Main Section
        
           </section>
            
        </main>   
        <!--<footer>GenieLab | Copyright @ 2023</footer> -->
    </body>
    
</html>


<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        /* --- General Styles --- */
        body {
            font-family: 'Sarabun', sans-serif;
            /* --- NEW: พื้นหลังแบบไล่ระดับสี --- */
            background: linear-gradient(135deg, #1f4068, #1687a7);
            background-size: cover;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* --- Form Container --- */
        .form-container {
            /* --- NEW: ทำให้พื้นหลังโปร่งแสงเล็กน้อย --- */
            background-color: rgba(255, 255, 255, 0.95);
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2); /* เพิ่มเงาให้เข้มขึ้น */
            max-width: 450px;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        h2 {
            color: #1f4068; /* เปลี่ยนสีหัวข้อให้เข้ากับธีม */
            text-align: center;
            margin-bottom: 25px;
        }

        /* --- Form Groups & Labels --- */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        /* --- Input Fields --- */
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        /* Style ตอนที่ผู้ใช้กำลังกรอกข้อมูล */
        input[type="text"]:focus,
        input[type="email"]:focus {
            /* --- NEW: เปลี่ยนสีตอนคลิกให้เข้ากับปุ่ม --- */
            border-color: #28a745; 
            box-shadow: 0 0 8px rgba(40, 167, 69, 0.25);
            outline: none;
        }

        /* --- Submit Button --- */
        .submit-btn {
            /* --- NEW: เปลี่ยนสีปุ่มเป็นสีเขียว --- */
            background-color: #28a745;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            /* --- NEW: สีเข้มขึ้นเมื่อเอาเมาส์ไปชี้ --- */
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <form action="save_database.php" method="POST">
            <h2>สร้างบัญชีผู้ใช้ใหม่</h2>
            
            <div class="form-group">
                <label for="firstname">ชื่อจริง</label>
                <input type="text" id="firstname" name="firstname" placeholder="กรอกชื่อจริงของคุณ" required>
            </div>
            
            <div class="form-group">
                <label for="lastname">นามสกุล</label>
                <input type="text" id="lastname" name="lastname" placeholder="กรอกนามสกุลของคุณ" required>
            </div>
            
            <div class="form-group">
                <label for="email">อีเมล</label>
                <input type="email" id="email" name="email" placeholder="ตัวอย่าง: user@example.com" required>
            </div>
            
            <button type="submit" class="submit-btn">ลงทะเบียน</button>
        </form>
    </div>

</body>
</html>
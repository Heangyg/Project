<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<body>
    <script>
    swal({
    text: "How was your experience getting help with this issue?",
    buttons: {
        cancel: "Close",
    },
    content: (
        <div>
        <MoodButton 
            rating={1} 
            onClick={onPick}
        />
        <MoodButton 
            rating={2} 
            onClick={onPick}
        />
        <MoodButton 
        rating={3} 
        onClick={onPick}
      />
    </div>
  )
})
    </script>  
</body>
</html>
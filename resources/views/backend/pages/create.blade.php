<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{-- js --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    

</head>
<body>
    <div class="container mt-5">
        <div class="form">
            <h5>Create new Post</h5>
            <form action="#" method="post">
                @csrf
                <div class="form-group">
                  <label for="location">Location</label>
                  <input type="text" name="location" id="location" class="form-control" placeholder="Enter a location" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="type">Type</label>
                  <select class="form-control" name="type" id="type">
                    <option value="room">room</option>
                    <option value="flat">flat</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" name="price" id="price" class="form-control" placeholder="price (rs)" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="for">For</label>
                    <select class="form-control" name="for" id="for">
                      <option value="student">student</option>
                      <option value="family">family</option>
                      <option value="others">others</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                  <textarea class="form-control" name="description" id="description" rows="3" placeholder="add some description.."></textarea>
                </div>
                <div class="form-group">
                  <label for="feature_image">Feature-image</label>
                  <input type="file" class="form-control-file" name="feature_image" id="feature-image" placeholder="" aria-describedby="fileHelpId">
                </div>
                <div class="form-group">
                    <label for="images">Images</label>
                    <input type="file" class="form-control-file" name="Images" id="Images" placeholder="" aria-describedby="fileHelpId">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Enter your email">
                </div>
                <div class="form-group">
                  <label for="phone">Phone number</label>
                  <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter your phone number" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" name="status" id="status">
                    <option value="available">available</option>
                    <option value="not available">not available</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary btm-small">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
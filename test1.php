<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>list : <input type="text" name="txt_list" id="txt_list" value="4, 2, 5, 6, 14, 7, 15, 3"></div>
    <div>ค้นหา : <input type="text" name="txt_search" id="txt_search" value="14"> &nbsp;<input type="button" id="btn_search" value="ค้นหา"></div>
    <h3> ประเภทของการค้นหา</h3>
    <div><select id="algor">
            <option value="1">1.Linear Search</option>
            <option value="2">2.Binary Search</option>
            <option value="3">3.Bubble Search</option>
        </select>
    </div>
    <h3> ผลลัพธ์ </h3>
    <textarea id="txt_result" name="txt_result" rows="15" cols="100">
        At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
    </textarea>


    <script>
        $(document).ready(function() {
            // console.log("ready!");
            // alert('sss')
            $('#btn_search').click(function() {
                // alert('s')
                let txt_list = $('#txt_list').val();
                let txt_search = $('#txt_search').val();
                let algor = $('#algor').val();
                // alert(algor)
                // $.post("./serach.php", {
                //     txt_list: txt_list,
                //     txt_search: txt_search,
                //     algor: algor
                // }).done(function(data) {
                //     // console.log(data)
                //     alert(data)
                // })
                let splitArr = txt_list.split(",");
                // alert(splitArr)
                console.log(linearSearch(splitArr, txt_search))
            });

        });

        function linearSearch(arr, elToFind) {
            // console.log(arr)
            let res = []
            let k = 0
            for (var i = 0; i < arr.length; i++) {
                // console.log(arr[i])
                k = k + 1
                if (arr[i].trim() == elToFind) {
                    // return i;
                    res.push("Round : " + k + " ====> " + elToFind + " = " + arr[i] + " found!!")
                    return res;
                } else {
                    res.push("Round : " + k + " ====> " + elToFind + " != " + arr[i] + "")
                }
            }
            // return null;
            res.push(elToFind + " Not found in array ");
            return res;
        }

        function binarySearch(sortedArray, elToFind) {
            var lowIndex = 0;
            var highIndex = sortedArray.length - 1;
            while (lowIndex <= highIndex) {
                var midIndex = Math.floor((lowIndex + highIndex) / 2);
                if (sortedArray[midIndex] == elToFind) {
                    return midIndex;
                } else if (sortedArray[midIndex] < elToFind) {
                    lowIndex = midIndex + 1;
                } else {
                    highIndex = midIndex - 1;
                }
            }
            return null;
        }
    </script>
</body>



</html>
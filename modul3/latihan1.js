/*
    alert : menampilkan sebuah pesan atau informasi ke dalam halaman website
    penulisan perintah pada javascript dapat diakhiri dengan tanda semicolon ataupun tidak perlu
 */

// Contoh 1 : mencetak informasi ke halaman website //
alert("Selamat Datang")

// Contoh 2 : mencetak informasi berupa operasi aritmatika //
var x = 5
var y = 2
z = x * y
alert(z) // hanya menampilkan informasi dari variable z (hasil perkalian variable x dan y)

// Contoh 3 : penggunaan if else //
var x = 95
if (x >= 80) {
    alert("Nilai = A")
} else if (x >= 70 && x < 80) {
    alert("Nilai = B")
} else if (x >= 60 && x <= 70) {
    alert("Nilai = C")
} else {
    alert("Nilai = D")
}
// apabila kondisi terpenuhi maka muncul informasi seperti yang ada di dalam statement if yang kondisinya terpenuhi
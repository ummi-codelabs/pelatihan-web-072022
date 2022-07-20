Latihan Mandiri
1. Buat Controller:
    SubjectController (controller mata kuliah)
    - method index() -> view -> subject
    - method show() -> view -> show_subject

2. Definisikan route
   - untuk index
   - untuk show


Prasyarat
- paham tentang controller
- paham tentang method
- paham tentang definisikan route

## Materi pertemuan 2
1. Passing data dari controller ke view
2. form, request get + post, & form validation
3. Templating UI


## Passing data 
- ada data mahasiswa: id, nim, nama
- index -> 
  - ambil data -> masukan ke variable 
  - variable data mahasiswa kita passing ke view
  - tampilkan data mahasiswa di table menggunakan blade directive foreach
    output: halaman daftar mahasiswa

    if(is_array($mahasiswa) && count($mahasiswa) > 0) {
        foreach($mahasiswa as $row) {

        }
    } else {

    }


## Form & Form validation
- method baru -> create() & store()
- method create()
  - menampilkan halaman form create data
  - coding view halaman form create data

- method store()
  - validasi
  - tampilkan input dari form
  - outputnya: tampilan nim dan nama dari form

- definisikan route
  - index -> name student.index
  - create() -> name student.create
  - store() -> name student.store


## UI
- bootstrap [v]
- tailwindcss
- materializecss

Latihan Mandiri
1. Modifikasi Controller:
    SubjectController (controller mata kuliah)
    - create()
    - store() -> validasi form

2. Definisikan route (nama route)
   - untuk create
   - untuk store

3. Gunakan template
   - index
   - show
   - create

## Materi pertemuan 3
- interaksi ke database (CRUD)


## Database
- table mahasiswa
  - id (primary key)            = integer
  - nim (kandidat primary key)  = varchar
  - nama                        = varchar 
  
- table mata kuliah
  - id (primary key)
  - kode mata kuliah
  - nama mata kuliah

- table kehadiran
  - id
  - id mata kuliah
  - id mahasiswa
  - kehadiran

- table nilai
  - id 
  - id mata kuliah
  - id mahasiswa
  - nilai


## Alur proses
1. setting konfigurasi database
2. buat database baru
3. buat skema database
4. coding CRUD

## algoritma save data
- user buka halaman create
- user input data -> klik button save
- proses save:
  - validasi
  - proses save data
  - alihkan ke halaman daftar mahasiswa
  - terdapat notifikasi data berhasil disimpan

## Latihan Mandiri tentang CRUD
1. buat crud untuk mata kuliah
2. buatkan route untuk masing-masing method

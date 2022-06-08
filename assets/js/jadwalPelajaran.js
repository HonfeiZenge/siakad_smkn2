// -- Make New Row --
const addNewRow = document.getElementById('addRow')
const jadwalBody = document.querySelector('.jadwalBody')
const saveData = document.getElementById('saveData')

const generateNewRow = (number, kelasData, mapelData, guruData, jamData) => {
    const makeRow = document.createElement('tr')
    const makeData1 = document.createElement('td')
    const makeData2 = document.createElement('td')
    const makeData3 = document.createElement('td')
    const makeData4 = document.createElement('td')
    const makeData6 = document.createElement('td')

    makeData6.innerText = number+=1
    makeData1.innerText = kelasData
    makeData2.innerText = mapelData
    makeData3.innerText = guruData
    makeData4.innerText = jamData

    makeRow.append(makeData6, makeData1, makeData2, makeData3, makeData4)
    jadwalBody.append(makeRow)
}

// -- Searched Data --
// DOM data declarations
const pilihKelas = document.querySelector('.pil__kelas')
const pilihMapel = document.querySelector('.pil__mapel')
const pilihGuru = document.querySelector('.pil__guru')
const listKelas = document.querySelector('.kelas__list')
const listMapel = document.querySelector('.mapel__list')
const listGuru = document.querySelector('.guru__list')
const plusKelas = document.querySelector('.plus__kelas')
const plusMapel = document.querySelector('.plus__mapel')
const plusGuru = document.querySelector('.plus__guru')
const kelasRadio = document.querySelectorAll('input[name="kelasRadio"]')
const mapelRadio = document.querySelectorAll('input[name="mapelRadio"]')
const guruRadio = document.querySelectorAll('input[name="guruRadio"]')
const form = document.getElementById('insertDataForm')

// Process Kelas
pilihKelas.addEventListener('click', (e) => {
    e.preventDefault()
    listKelas.classList.remove('visually-hidden')
})
plusKelas.addEventListener('click', (e) => {
    // To prevent button nature functionality (refreshing page after clicking)
    e.preventDefault()
    // Iterate through the kelasRadio list and if one get checked then set the text value to the checked value
    for (let selected of kelasRadio) if (selected.checked) form.kelasText.value = selected.value
    // To hide the kelas table
    listKelas.classList.add('visually-hidden')
})

// Process Mapel
pilihMapel.addEventListener('click', (e) => {
    e.preventDefault()
    listMapel.classList.remove('visually-hidden')
})
plusMapel.addEventListener('click', (e) => {
    e.preventDefault()
    for (let selected of mapelRadio) if (selected.checked) form.mapelText.value = selected.value
    listMapel.classList.add('visually-hidden')
})

// Process Guru
pilihGuru.addEventListener('click', (e) => {
    e.preventDefault()
    listGuru.classList.remove('visually-hidden')
})
plusGuru.addEventListener('click', (e) => {
    e.preventDefault()
    for (let selected of guruRadio) if (selected.checked) form.guruText.value = selected.value
    listGuru.classList.add('visually-hidden')
})

let storeJadwalData = []
saveData.addEventListener('click', () => {
    storeJadwalData.push({
        jadwal: [form.kelasText.value, form.mapelText.value, form.guruText.value, form.jamText.value]
    })
    form.reset()

    jadwalBody.innerHTML = ''
    storeJadwalData.forEach((data, index) => {
        generateNewRow(index, data.jadwal[0], data.jadwal[1], data.jadwal[2], data.jadwal[3])
    })
})
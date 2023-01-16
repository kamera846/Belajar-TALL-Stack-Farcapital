document.addEventListener('alpine:init', () => {

    /**
     * Hello Data
     */
    Alpine.data('hello', () => ({
        message: 'I am Alpine',
    }))

    /**
     * Users Data
     */
    Alpine.data('users', () => ({
        role: null,

        // Menyimpan data ke LocalStorage
        setRole(value) {
            localStorage.setItem('role', value)
        },

        // Mengambil data dari LocalStorage
        getRole() {    
            this.role = localStorage.getItem('role')
        },

        // Menghapus data dari LocalStorage
        deleteRole() {
            // Menghapus data dari LocalStorage berdasarkan key
            localStorage.removeItem('role')
            // Menghapus semua data dari LocalStorage
            // localStorage.clear()
        }
    }))

    /**
     * Movies Data
     */
    Alpine.data('movies', () => ({
        baseUrl: 'https://imdb8.p.rapidapi.com',
        /**
         * Excedeed Api Key
         */
        // apiKey: '4efdfdf577msh2184d6b038165d6p136ffcjsn021a3bd97a87',
        /**
         * Active Api Key
         */
        apiKey: 'e8ca1aa3c0msh13242a9573852c3p1dc2bdjsn5162c0ed1793',
        listMovie: [],

        async getMovies() {
            // Fetch API
            var response = await fetch(this.baseUrl + `/auto-complete?q=marvel`, {
                method: 'GET',
                headers: {
                  'X-RapidAPI-Key': this.apiKey,
                  'X-RapidAPI-Host': 'imdb8.p.rapidapi.com',
                }
            })

            // Consume Response Api
            // console.log("response1", response)

            response = await response.json()
            // console.log("response2", response)

            this.listMovie = response.d
            // console.log("listMovie", this.listMovie)
            
        }
    }))

})
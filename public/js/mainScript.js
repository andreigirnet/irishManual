function app(){
    return {
        data: null,
        faq: null,
        team: null,
        consult: null,
        currentLanguage: null,
        async fetchData(){
            try {
                let lang = localStorage.getItem('lang');
                console.log("The value of lang is" + lang);
                if(!lang){
                    this.currentLanguage = 'ro'
                }else{
                    this.currentLanguage = lang
                }
                console.log(this.currentLanguage)
                let response;
                response = await axios.get('/data/welcome.json');
                this.data = response.data[this.currentLanguage]
                if (window.location.pathname === '/faq') {
                    let faqResponse;
                    faqResponse = await axios.get('/data/faq.json');
                    this.faq = faqResponse.data[this.currentLanguage]
                }
                if (window.location.pathname === '/team') {
                    let teamResponse;
                    teamResponse = await axios.get('/data/team.json');
                    this.team = teamResponse.data[this.currentLanguage]
                }
                if (window.location.pathname === '/consulting') {
                    let consultingResponse;
                    consultingResponse = await axios.get('/data/consulting.json');
                    this.consult = consultingResponse.data[this.currentLanguage]
                }
                console.log(this.team)
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        },
        chooseLanguage(string) {
            this.currentLanguage = string
            localStorage.setItem('lang',  string);
            this.currentLanguage = localStorage.getItem('lang');
            this.fetchData();
        },
        init(){
            this.fetchData();
        }
    }
}

class User
{
	constructor()
	{
		this.default = "default"
		this.citizenship = this.default;
		this.email = this.default;
		this.outcoming_country = this.default;
		this.incoming_country = this.default;
		this.telephone = this.default;
		this.person_name = this.default;
		this.surname = this.default;
		this.city = this.default;
		this.state = this.default;
		this.person_images = [this.default];
		this.facebook = this.default;
		this.skype = this.default;
		this.telegram = this.default;
	}

	get DEFAULT(){
		return this.default;
	}
	get EMPTY(){
		return "";
	}

	get Citizenship(){
		return this.citizenship;
	}
	get Email(){
		return this.email;
	}
	get Outcoming_country(){
		return this.outcoming_country;
	}
	get Incoming_country(){
		return this.incoming_country;
	}
	get Telephone(){
		return this.telephone;
	}
	get Person_name(){
		return this.person_name;
	}
	get Surname(){
		return this.surname;
	}
	get City(){
		return this.city;
	}
	get State(){
		return this.state;
	}
	get Person_Images(){
		return this.person_images;
	}
	get Facebook(){
		return this.facebook;
	}
	get Skype(){
		return this.skype;
	}
	get Telegram(){
		return this.telegram;
	}


	set Citizenship(val){
		this.citizenship = val;
	}
	set Email(val){
		this.email = val;
	}
	set Outcoming_country(val){
		this.outcoming_country = val;
	}
	set Incoming_country(val){
		this.incoming_country = val;
	}
	set Telephone(val){
		this.telephone = val;
	}
	set Person_name(val){
		this.person_name = val;
	}
	set Surname(val){
		this.surname = val;
	}
	set City(val){
		this.city = val;
	}
	set State(val){
		this.state = val;
	}
	set Person_Images(val){
		this.person_images = val;
	}
	set Facebook(val){
		this.facebook = val;
	}
	set Skype(val){
		this.skype = val;
	}
	set Telegram(val){
		this.telegram = val;
	}

	Associate(key)
	{
		switch(key)
		{
			case "Тип візи":
				return this.citizenship;
			case "Email":
				return this.email;
			case "Країна виїзду":
				return this.outcoming_country;
			case "Країна в'їзду":
				return this.incoming_country;
			case "Мобільний телефон":
				return this.telephone;
			case "Ім'я":
				return this.person_name;
			case "Прізвище":
				return this.surname;
			case "Місто":
				return this.city;
			case "Область":
				return this.state;
			case "Facebook":
				return this.facebook;
			case "Skype":
				return this.skype;
			case "Telegram":
				return this.telegram;
		}
	}
}
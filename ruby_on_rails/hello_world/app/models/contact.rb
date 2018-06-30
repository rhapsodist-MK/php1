class Contact < ApplicationRecord
	Contact.create(email: "asdfasdf@gmail.com", content: "hello world")
	contact = Contact.find(1)
	puts contact.name
end

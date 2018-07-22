class ContactsController < ApplicationController
  before_action :authenticate, only: [:index]
  before_action :authenticate_admin, only: [:index]

  def index
    @all_contacts = Contact.all
  end

  def new

  end

  def create
    @name = params[:name]
    @email = params[:email]
    @content = params[:content]

    # db저장
    new_contact = Contact.new(name: @name, email: @email, content: @content)
    if(new_contact.save)
      # redirect_to "/contacts/index"
      redirect_to contacts_path
    else
      # redirect_to "/contacts/new"
      redirect_to new_contact_path
    end
  end
end

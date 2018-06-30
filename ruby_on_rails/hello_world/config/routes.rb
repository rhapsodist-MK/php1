Rails.application.routes.draw do
  	resources :contacts, only: [:index, :create, :new]

	get '/' => 'home#hello_world'
	get '/index' => 'home#index'
	get '/contact' => 'home#contact'
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end

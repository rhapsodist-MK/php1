Rails.application.routes.draw do
  #get 'sessions/new'
  resources :sessions, only: [:new, :create, :destroy]

  # get 'users/new'
  resources :users, only: [:new, :create]

  # get 'contacts/index'
  # get 'contacts/new'
  # post 'contacts/create'
  resources :contacts, only: [:index, :create, :new]

  get '/' => 'home#hello_world'
  get '/index' => 'home#index'
  get '/contact' => 'home#contact'
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end

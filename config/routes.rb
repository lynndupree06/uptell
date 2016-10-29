Rails.application.routes.draw do
  devise_for :users
  root to: 'home#index'
  get 'about' => 'home#about'
  get 'help' => 'home#help'
  get 'educators' => 'home#educators'
end

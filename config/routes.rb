Rails.application.routes.draw do
  get 'dashboard' => 'dashboard#index'
  get 'artstory' => 'dashboard#artstory'
  get 'audiostory' => 'dashboard#audiostory'
  get 'groupstory' => 'dashboard#groupstory'
  get 'musicstory' => 'dashboard#musicstory'
  get 'videostory' => 'dashboard#videostory'
  get 'textstory' => 'dashboard#textstory'
  get 'picturestory' => 'dashboard#photostory'
  get 'sampleproject' => 'dashboard#sampleproject'

  devise_for :users
  root to: 'home#index'
  get 'about' => 'home#about'
  get 'help' => 'home#help'
  get 'educators' => 'home#educators'
end

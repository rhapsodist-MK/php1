class ApplicationController < ActionController::Base
    protect_from_forgery with: :exception
    include SessionsHelper

    def authenticate
        redirect_to new_session_path unless user_signed_in?
    end

    def authenticate_admin
        
        unless current_user.admin
            flash[:alert] = 'no admin'
            redirect_to '/'
        end
    end
end

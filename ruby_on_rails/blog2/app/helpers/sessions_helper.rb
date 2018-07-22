module SessionsHelper
    def log_in(user)
        session[:user_id] = user.id
    end

    def current_user
        # if @current_user.nil?
        #     @current_user = User.find_by(id: session[:user_id])
        # end
        # return @current_user


        # @current_user = @current_user || User.find_by(id: session[:user_id])
        # return @current_user

        @current_user ||= User.find_by(id: session[:user_id])
        return @current_user
    end

    def user_signed_in?
        !current_user.nil?
    end

    def log_out
        session.delete(:user_id)
        # session[:user_id] = nil
        @current_user = nil
    end
end

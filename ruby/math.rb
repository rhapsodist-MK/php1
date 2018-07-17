# 올림
#puts 2.2.ceil() 
# 내림
#puts 2.2.floor()
# 제곱 
#puts (2**10) 
# pi 값
#puts (Math::PI) 



# 문자열
# puts 'hello'
# puts "hello!"
# puts "hello 'world'"
# puts ("hello " + "hello")
# puts ('hello ' * 3)
# puts ('hello'[0])
# puts ('hello'[1])



# 첫문자만 대문자
# puts 'hello world'.capitalize() 
# 모든 문자 대문자
# puts 'hello world'.upcase()
# 문자열 크기
# puts 'hello world'.length()
# 문자열 교체
# puts 'hello world'.sub('world', 'programming')



# 특수 기호 표시
# puts "hahaha's \"tutorial\""
# puts "\\"
# 탭
# puts "hello \t\t world"
# 알람 울림
# puts "\a"


# 변수 활용
# x = 10
# puts x + 5

# title = "python & ruby"
# puts ("title is " + title)



# boolen
# puts 1 == 2
# puts 1 != 2
# puts true
# puts false



# 조건문

# if false
# 	puts "code"
# end

# input = 11
# real = 11
# if real == input
# 	puts('hello')
# end

# input = 11
# real = 22
# if real == input
# 	puts ("hello")
# else
# 	puts ('who are you')
# end

# a = 33
# b = 22
# c = 11
# if a == b
# 	puts 'BBB'
# elsif a == c
# 	puts 'CCC'
# else
# 	puts 'none'
# end



# input output
# puts ("please input")
# str = gets.chomp()
# puts(str + " !!")


# 연산자
# if 1 == 1 or 2 == 22
# 	puts 'true'
# end


#array
# arr = ['a', 'b', 'c']
# puts arr.class()
# puts arr[0]
# arr[0] = 'rhapsodist'
# puts arr[0]
# puts arr

# a1 = [1,2,3,4,5,6]
# puts a1.length
# a1.push(8)
# print a1
# puts
# a1.delete_at(1)
# print a1


# 반복문
# while false do
#     puts "hihi";
# end

# i = 0
# while i < 3 do
#     puts 'hello~!'
#     i = i + 1;
# end

# i = 0
# while i < 10 do
#     puts 'hello ' + (i * 9).to_s() + ' !!'
#     i += 1;
# end

# i = 0
# while i < 10 do
#     if i == 4
#         break
#     end

#     puts(i)
#     i += 1
# end


#array && loop

# members = ['aaa', 'bbb', 'ccc']
# i = 0
# while i < members.length do
#     puts (members[i])
#     i += 1;
# end

# members = ['aaa', 'bbb', 'ccc']
# for m in members do
#     puts m
# end


# for item in [0,1,2,3,4] do
#     puts item
# end

for item in (5..10) do
    puts item
end




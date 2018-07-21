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

# for item in (5..10) do
#     puts item
# end



# 함수
# def a3()
#     puts('aaa')
# end
# a3()


# def a3()
#     return 'aa'
# end
# puts a3()


# def a(num)
#     return 'a' * num
# end
# puts a(100)


# def make_string(str, num)
#     return str * num
# end
# puts (make_string('abc', 100))


# puts("input your id")
# input_id = gets.chomp()
# if login(input_id)
#     puts('hello, ' + input_id)
# else
#     puts('who are you?')
# end
# def login(id)
#     members = ['aa', 'bb', 'cc']
#     for m in members do
#         if m == id
#             return true
#         end
#     end
#     return false
# end


# 함수 괄호, return 생략 기능

# def f1()
#     return 'f1'
# end
# puts f1()
# def f2
#     return 'f2'
# end
# puts f2()
# def f3
#     return 'f3'
# end
# puts f3
# def f4(a1)
#     return a1
# end
# puts f4('f4')
# def f5 a1   #한칸 띄우기
#     return a1
# end
# puts f5('f5')
# def f6 a1
#     return a1
# end
# puts f6 'f6'
# def f7
#     'f7'    #return과 같음  
# end
# puts f7
# def f8
#     a = 1
#     b = 2
#     a + b
# end
# puts f8



# block || <- 파이프사용가능

# 5.times() {puts '5times'}
# 2.times() {puts '2times'}
#   함수    블럭

# 3.upto(5) {puts '3 to 5 upto'}
# 3.upto(6) {|i| puts i}

# arr = ['A','B','C']
# arr.each(){
#     |item|
#     puts item.downcase()
# }
# for value in arr
#     puts value
# end


# arr = [1,2,5,4,3,34,39,50,28]
# arr.delete_if(){|item|
#     item > 7  #한줄인 경우 {}
# }
# puts arr


# arr = [1,2,5,4,3,34,39,50,28]
# arr.delete_if() do |item|
#     item > 7  #2줄이상인 경우 do ~ end
# end
# puts arr
var frases = [
    { frase:'O material escolar mais barato que existe na praça é o professor.', autor:'Jô Soares' },

    {frase:'As pessoas costumam dizer que a motivação não dura sempre. Bem, nem o efeito do banho, por isso recomenda-se diariamente.', autor:'Zig Ziglar'},

    {frase:'Motivação é a arte de fazer as pessoas fazerem o que você quer que elas façam porque elas o querem fazer.', autor:'Dwight Eisenhower'},

    {frase:'A verdadeira motivação vem de realização, desenvolvimento pessoal, satisfação no trabalho e reconhecimento.', autor:'Frederick Herzberg'},

    {frase:'A educação tem raízes amargas, mas os seus frutos são doces.', autor:'Aristóteles'},

    {frase:'O homem não é nada além daquilo que a educação faz dele.', autor:'Immanuel Kant'},

    {frase:'A educação para o sofrimento evitaria senti-lo com relação a casos que não o merecem.', autor:'Carlos Drummond de Andrade'},

    {frase:'O mestre disse: Por natureza, os homens são próximos; a educação é que os afasta.', autor:'Confúcio'},

    {frase:'Educação é aquilo que a maior parte das pessoas recebe, muitos transmitem e poucos possuem.', autor:'Karl Kraus'},

    {frase:'A educação exige os maiores cuidados, porque influi sobre toda a vida.', autor:'Sêneca'},

    {frase:'A persistência é o caminho do êxito.', autor:'Charles Chaplin'},

    {frase:'Lute. Acredite. Conquiste. Perca. Deseje. Espere. Alcance. Invada. Caia. Seja tudo o quiser ser, mas acima de tudo, seja você sempre.', autor:'Tumblr'},

    {frase:'Só existe um êxito: a capacidade de levar a vida que se quer.', autor:'Cristopher Morley'},

    {frase:'A vitalidade é demonstrada não apenas pela persistência, mas pela capacidade de começar de novo.', autor:'F. Scott Fitzgerald'},

    {frase:'O homem não teria alcançado o possível se, repetidas vezes, não tivesse tentado o impossível.', autor:'Max Weber'},

    {frase:'Só se pode alcançar um grande êxito quando nos mantemos fiéis a nós mesmos.', autor:'Friedrich Nietzsche'},

    {frase:'Todo mundo é capaz de sentir os sofrimentos de um amigo. Ver com agrado os seus êxitos exige uma natureza muito delicada.', autor:'Oscar Wilde'},

    {frase:'Creia em si, mas não duvide sempre dos outros.', autor:'Machado de Assis'},

    {frase:'As únicas grandes companhias que conseguirão ter êxito são aquelas que consideram os seus produtos obsoletos antes que os outros o façam.', autor:'Bill Gates'},

    {frase:'Para ter um negócio de sucesso, alguém, algum dia, teve que tomar uma atitude de coragem.', autor:'Peter Drucker'},

    {frase:'Nenhum mentiroso tem uma memória suficientemente boa para ser um mentiroso de êxito.', autor:'Abraham Lincoln'},

    {frase:'Estar decidido, acima de qualquer coisa, é o segredo do êxito.', autor:'Henry Ford'},

    {frase:'A vida sem luta é um mar morto no centro do organismo universal.', autor:'Machado de Assis'},

    {frase:'Cada qual sabe amar a seu modo; o modo, pouco importa; o essencial é que saiba amar.', autor:'Machado de Assis'},

    {frase:'Deus, para a felicidade do homem, inventou a fé e o amor. O Diabo, invejoso, fez o homem confundir fé com religião e amor com casamento.', autor:'Machado de Assis'},

    {frase:'Não é amigo aquele que alardeia a amizade: é traficante; a amizade sente-se, não se diz.', autor:'Machado de Assis'},

    {frase:'Não levante a espada sobre a cabeça de quem te pediu perdão.', autor:'Machado de Assis'},

    {frase:'Esquecer é uma necessidade. A vida é uma lousa, em que o destino, para escrever um novo caso, precisa de apagar o caso escrito.', autor:'Machado de Assis'},

    {frase:'As vezes, a vida bate com um tijolo na sua cabeça. Não perca a fé.', autor:'Steves Jobs'},

    {frase:'Seja criterioso com a qualidade. Algumas pessoas não estão acostumadas com um ambiente onde a excelência é esperada.', autor:'Steves Jobs'},

    {frase:'Ser o homem mais rico do cemitério não me interessa. Ir para a cama à noite dizendo que fizemos algo maravilhoso, isso importa para mim.', autor:'Steves Jobs'},

    {frase:'Minha coisa favorita na vida não custa dinheiro. É bastante claro que o recurso mais precioso que todos temos é o tempo.', autor:'Steves Jobs'},

    {frase:'Às vezes, quando você inova, você comete erros. É melhor admiti-los rapidamente, e seguir em frente para melhorar suas outras inovações.', autor:'Steves Jobs'},

    {frase:'A imaginação é mais importante que o conhecimento.', autor:'Albert Einstein'},

    {frase:'Viver é como andar de bicicleta: É preciso estar em constante movimento para manter o equilíbrio.', autor:'Albert Einstein'},

    {frase:'Nenhum problema pode ser resolvido a partir do mesmo nível de consciência que o criou.', autor:'Albert Einstein'},

    {frase:'O importante é não parar de questionar. A curiosidade tem a sua própria razão para existir.', autor:'Albert Einstein'},

    {frase:'Só duas coisas são infinitas, o universo e a estupidez humana, mas não estou seguro sobre o primeiro.', autor:'Albert Einst'},

    {frase:'Não tente se tornar uma pessoa de sucesso, tente se tornar uma pessoa de valor.', autor:'Albert Einstein'},

    {frase:'No meio da dificuldade encontra-se a oportunidade.', autor:'Albert Einstein'},

    {frase:'A definição de insanidade é fazer a mesma coisa repetidamente e esperar resultados diferentes.', autor:'Albert Einstein'}

];

indice = Math.floor(Math.random() * frases.length);

    document.getElementById("frase-motivacao").innerHTML = frases[indice]['frase'];
    document.getElementById("autor-frase-motivacao").innerHTML = frases[indice]['autor'];